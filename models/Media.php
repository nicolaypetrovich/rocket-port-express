<?php

namespace app\models;

use Imagine\Image\Box;
use Yii;
use yii\db\ActiveRecord;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Model for work with images
 *
 */
class Media extends ActiveRecord
{

	public $image;



    /**
     * Single image upload method
     */
	public function uploadImage($file)
	{
		$name = md5(time()) . '.' . pathinfo($file->name, PATHINFO_EXTENSION);
		if( $file->saveAs( Yii::getAlias('@web') . 'uploads/images/' . $name ) )
		{
			$image = new Media();
			$image->name = $name;
			$image->title = $file->name;
			$image->alt = '';


			$image->save();
		}
	}


	public function getImageOfSize($height='',$width='',$quality=90){

	    if(''==$height||''==$width){
            return Yii::getAlias('@web/' . 'uploads/images/'. $this->name);
        }
        if(file_exists(Yii::getAlias('@web'). 'uploads/images/'.$this->name) || file_exists(Yii::getAlias('@web'). 'uploads/images/'.$width.'x'.$height.'/'.$this->name)){
            if(! file_exists(Yii::getAlias('@web'). 'uploads/images/'.$width.'x'.$height.'/'.$this->name) ){
                if (!is_dir(Yii::getAlias('@web'). 'uploads/images/'.$width.'x'.$height.'/')) {
                    mkdir(Yii::getAlias('@web'). 'uploads/images/'.$width.'x'.$height.'/', 0777, true);
                }
                Image::getImagine()->open(Yii::getAlias('@web') . 'uploads/images/'.$this->name)->thumbnail(new Box($width,$height ))->save(Yii::getAlias('@web'). 'uploads/images/'.$width.'x'.$height.'/'.$this->name , ['quality' => $quality]);
            }

            return Yii::getAlias('@web/' . 'uploads/images/'.$width.'x'.$height.'/' . $this->name);
        }
        return null;
    }

}