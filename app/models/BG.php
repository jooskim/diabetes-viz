<?php
/**
 * Created by PhpStorm.
 * User: jooskim
 * Date: 11/17/13
 * Time: 12:22 PM
 */
class BG extends Eloquent {
    protected $table = "BG";
    protected $fillable = array('createdDate', 'createdTime', 'level', 'note');

}
?>