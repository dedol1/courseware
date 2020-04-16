<?php namespace CS\Courseware\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCsCourseware extends Migration
{
    public function up()
    {
        Schema::table('cs_courseware_', function($table)
        {
            $table->text('description')->default('null')->change();
            $table->text('year')->nullable()->unsigned(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('cs_courseware_', function($table)
        {
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->nullable()->unsigned(false)->default(NULL)->change();
        });
    }
}
