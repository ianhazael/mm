<?php

Yii::import('application.extensions.portlet.XPortlet');

class BannerLateral extends XPortlet{

    public function renderContent($id=0) {

      $bannerCount = Banners::model()->count();
	  
	  if($id==0){
		$sql = "SELECT * FROM " . Banners::model()->tableName() . " WHERE tipo = 2 ORDER BY RAND() LIMIT 6;";  
	  }else{
  	    $sql = "SELECT * FROM " . Banners::model()->tableName() . " WHERE tipo = 2 ORDER BY RAND() LIMIT 1;";
	  }

	
	  $banners = Banners::model()->findBySql($sql);
      //$banner = Banners::model()->findByPk($randomnumber);
      //echo '<a target="_blank" href="' . $banner->link . '">' . $banner->comment . '<br><img src="' . $banner->image . '"></img></a>';
	  $width = 300;
	  	  	  
	  $connection = Yii::app()->db;
	  $command = $connection->createCommand($sql);
	  $banners = $command->queryAll(); 
		
	  foreach($banners as $banner){		
	  	$imghtml = CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$banner['nombre_imagen'],$banner['nombre_imagen'],array("width"=>$width));
		echo CHtml::link($imghtml, array('banners/view', 'id'=>$banner['id']));
		echo '</br></br>';
	  }
	  	  
   }

}
?>