<?php
// ...
class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // L'identifiant
            $table->string('name'); // Le nom ou titre
            $table->text("description"); // La description
            $table->double("price"); // Le prix
            $table->timestamps(); // created_at, updated_at
        });
    }
    // ...
}
?>
