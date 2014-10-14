<?php
class PageController extends Controller
{
    public function actionIndex()
    {
        $this->render('link1');        
    }
    
    
    
    public function actionLink($id = null)
    {
        $request = Yii::app()->request;
        if($request->isAjaxRequest){
            $content = $this->renderPartial('link'.$id,'',true);
            echo $content;
        }  else {
            $this->render('link'.$id); 
        }
           
    }
}
?>