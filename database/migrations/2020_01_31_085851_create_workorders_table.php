<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 'wno','client','address1','acno','fat','tag','pon','signalo','decoder','fiber','utp','prewire','wtype','comment','team'
        Schema::create('workorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('wono', 7);
            $table->string('client', 100);
            $table->text('address1');
            $table->char('acno', 12);
            $table->char('fat', 10);
            $table->char('tag', 10);
            $table->char('pon', 10);
            $table->char('signalo', 10);
            $table->char('decoder', 10);
            $table->char('fiber', 3);
            $table->char('utp', 3);
            $table->enum('prewire', ['yes', 'no']);
            $table->enum('wtype', ['sfu', 'mdu']);
            $table->mediumText('comment');
            $table->string('team', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
