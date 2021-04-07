<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->bigIncrements('col1_bigIncrement');
            $table->bigInteger('col2_bigInteger')->nullable()->default(12);
            //$table->binary('col3_binary')->nullable()->default(12);
            $table->boolean('col4_boolean')->nullable()->default(false);
            //$table->char('col5_char', 4)4->default('text');
            $table->dateTimeTz('col6_created_at', $precision = 0);
            //$table->dateTime('col7_dateTime')->nullable()->default(new DateTime());
            $table->dateTime('col71_created_at', $precision = 0);
            $table->date('col8_date');
            $table->decimal('col9_decimal', 5, 2)->nullable()->default(123.45);
            $table->double('col10_double', 15, 8)->nullable()->default(123.4567);
            //$table->enum('col11_enum', ['foo', 'bar'])->nullable()->default(['foo', 'bar']);
            $table->enum('col111_enum', ['easy', 'hard']);
            $table->float('col12_float')->nullable()->default(123.45);
            // $table->foreignId('user_id');
            $table->geometryCollection('col_14_geometryCollection_positions');
            $table->geometry('col_15_geometry_positions');
            //$table->increments('col16_increments');
            $table->integer('col17_integer')->unsigned()->nullable()->default(12);
            $table->ipAddress('visitor');
            $table->json('col19_json')->nullable();
            $table->jsonb('col20_jsonb')->nullable();
            $table->longText('description');
            $table->macAddress('col21_macAddress');
            // //column::mediumIncreme
            $table->mediumText('col23_mediumText');
            $table->morphs('col23_morphs'); //se crearán dos tablas _id _type
            $table->multiLineString('col24_multiLineString');
            $table->multiPoint('col25_multiPoint');
            $table->multiPolygon('col26_multiPolygon');
            // $table->nullableMorphs('taggable'); //The method is similar to the morphs method; however, the columns that are created will be "nullable"
            // $table->nullableTimestamps(0); //The method is similar to the timestamps method; however, the column that is created will be "nullable"
            // //column::mps
            // $table->nullableUuidMorphs('taggable'); //The method is similar to the uuidMorphs method; however, the columns that are created will be "nullable"
            // //column::phs
            $table->point('col32_point');
            $table->polygon('col33_polygon');
            $table->rememberToken('col34_rememberToken');
            $table->set('col35_flavors', ['strawberry', 'vanilla']);
            // $table->smallIncrements('id');
            $table->smallInteger('col37_smallInteger')->nullable()->default(12);
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            // $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->string('col40_string', 100)->nullable()->default('text');
            $table->text('col41_text');
            $table->timeTz('col_42_timeTz', $precision = 0);
            $table->time('col43_time', $precision = 0);
            $table->timestampTz('col44_timestampTz', $precision = 0);
            // $table->timestamp('col45_timestamp')->nullable()->default(time());
            // //column::timestampsTz
            // $table->timestamps();
            // $table->tinyIncrements('id');
            $table->tinyInteger('col49_tinyInteger');
            $table->unsignedBigInteger('col50_unsignedBigInteger');
            // //column::ger
            $table->unsignedDecimal('col52_unsignedDecimal', $precision = 8, $scale = 2);
            // //column::al
            $table->unsignedInteger('col54_unsignedInteger');
            $table->unsignedMediumInteger('col55_unsignedInteger');
            // //column::mInteger
            $table->unsignedSmallInteger('col56_unsignedSmallInteger');
            // //column::teger
            $table->unsignedTinyInteger('col58_unsignedTinyInteger');
            // //column::eger
            $table->uuidMorphs('col60_uuidMorphs');
            // $table->uuid('id');
            $table->year('birth_year');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
