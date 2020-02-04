<?php

namespace app\controllers;

use app\models\project\LinkModel;
use yii\web\Controller;
use Yii;
use yii\web\Response;

class MainController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $link = Yii::$app->request->get('link');

        $linkModel = new LinkModel();
        $linkModel->user_link = $link;
        $linkModel->link = $this->generateLink($link);

        if ($linkModel->validate() && $linkModel->save()) {
            $data = [
                'id' => $linkModel->id,
                'userLink' => $linkModel->user_link,
                'link' => $linkModel->link
            ];

            return $data;
        }
        return false;
    }

    public function actionLink($link)
    {
        $link = Yii::$app->request->get('link');

        $model = LinkModel::find()
            ->where(['link' => $link])
            ->one();

        if ($model) {
            header('Location: http://www.' . $model->user_link);
            exit;
        }
    }

    /**
     * @param string $userLink
     * @return string
     */
    private function generateLink(string $userLink)
    {
        $hash = md5($userLink);

        return substr($hash, 0, 11);
    }
}
