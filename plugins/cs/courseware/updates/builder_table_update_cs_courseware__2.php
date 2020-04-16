<?php namespace CS\Courseware\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCsCourseware2 extends Migration
{
    public function up()
    {
        Schema::table('cs_courseware_', function($table)
        {
            $table->string('slug')->nullable();
            $table->text('description')->default('null')->change();
            $table->text('year')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('cs_courseware_', function($table)
        {
            $table->dropColumn('slug');
            $table->text('description')->default('NULL')->change();
            $table->text('year')->default('NULL')->change();
        });
    }
}
