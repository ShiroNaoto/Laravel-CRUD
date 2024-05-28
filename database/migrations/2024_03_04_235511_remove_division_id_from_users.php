<?php

// database/migrations/{timestamp}_remove_division_id_from_users.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDivisionIdFromUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('division_id');
        });
    }

    public function down()
    {
        // If you need to revert the changes
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('division_id')->nullable()->constrained();
        });
    }
}
