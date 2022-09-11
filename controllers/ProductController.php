<?php

namespace app\controllers;

use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\data\Pagination;

class ProductController extends Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Product();

        // función para subir la img
        $this->uploadImage($model);

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $this->uploadImage($model);

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        // necesitamos borrar la imagen primero, antes de borrar el registro en la BDD
        $model=$this->findModel($id);

        if(file_exists($model->image)){
            unlink($model->image);
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionList(){
        $model = Product::find();

        $pagination = new Pagination([
            'defaultPageSize'=>4,
            'totalCount'=>$model->count()
        ]);

        $products= $model->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('list', ['products'=>$products, 'pagination'=>$pagination]);

    }

    protected function uploadImage(Product $model){

        if($this->request->isPost && $model->load($this->request->post())){

            //obtener archivo subido
            $model->imagefile=UploadedFile::getInstance($model, 'imagefile');

            // Verificaciones de modelo, si es un archivo, y si subio un archivo.
            if($model->validate()){

                if($model->imagefile){

                    if(file_exists($model->image)){

                        //borrar la imagen en caso de que ya exista
                        unlink($model->image);
                    }

                    //Asignar un nombre a la imagen, usando time para un nombre unico
                    $filePath='resources/'.time().'_'.$model->imagefile->baseName.'.'.$model->imagefile->extension;

                    if($model->imagefile->saveAs($filePath)){

                        $model->image=$filePath;
                    }
                }
            }
            if($model->save(false)){
                return $this->redirect(['index']);
            }

        }
        else {
            $model->loadDefaultValues();
        }
    }
}
