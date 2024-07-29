<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->dateTime('creation_date');
            $table->text('image_url');
            $table->softDeletes();

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
