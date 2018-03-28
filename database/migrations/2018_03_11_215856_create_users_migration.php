 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('users', function(Blueprint $table){
          $table->increments('id');
          $table->string('email');
          $table->string('username');
          $table->string('password');
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->string('location')->nullable();
          $table->string('remeber_token')->nullable();
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
        //
        Schema::drop('users');
    }
}
