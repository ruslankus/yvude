<?php
class PageController extends Controller
{
    public function actionIndex()
    {
        $this->render('link1');        
    }
    
    
    
    public function actionLink($id = null)
    {
        $this->render('link'.$id);    
    }
}
?>