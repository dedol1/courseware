<?php namespace CS\Courseware\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCsCourseware extends Migration
{
    public function up()
    {
        Schema::create('cs_courseware_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cs_courseware_');
    }
}
