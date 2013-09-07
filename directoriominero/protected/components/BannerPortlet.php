<?php

Yii::import('application.extensions.portlet.XPortlet');

class BannerPortlet extends XPortlet{        

    public function renderContent() {

      $bannerCount = Banners::model()->count();

      //$randomnumber = (rand()%$bannerCount + 1); // 0 shouldn't be possible

	  $sql = "SELECT * FROM " . Banners::model()->tableName() . " WHERE tamano = '300X250' ORDER BY RAND() LIMIT 3;";

	
	  $banners = Banners::model()->findBySql($sql);
      //$banner = Banners::model()->findByPk($randomnumber);
      //echo '<a target="_blank" href="' . $banner->link . '">' . $banner->comment . '<br><img src="' . $banner->image . '"></img></a>';
	  $width = 300;
	  $heigth = 250;
	  	  
	  $connection = Yii::app()->db;
	  $command = $connection->createCommand($sql);
	  $banners = $command->queryAll(); 
		
	  foreach($banners as $banner){		
	  	$imghtml = CHtml::image(Yii::app()->request->baseUrl.'/images/banner/'.$banner['nombre_imagen'],$banner['nombre_imagen'],array("width"=>$width, "heigth"=>$heigth));
		echo CHtml::link($imghtml, array('banners/view', 'id'=>$banner['id']));
		echo "&nbsp;";
	  }		
   }

}
?>