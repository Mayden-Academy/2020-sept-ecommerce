<?php

class DetailedProduct {
//    public $id = 1;
    public $title = 'Robot Apron';
    public $price = 23;
    public $image = 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80';
    public $imageTwo = 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80';
    public $imageThree = 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80';
    public $category = [
        'id' => 1,
        'name' => 'Destroyer of Worlds'
    ];
    public $character = [
        'id' => 2,
        'name' => 'Fred',
        'image' => 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80',
        'description' => 'Fred is fun loving and loves to go to the beach'
    ];
//    public $categoryID = 1;
//    public $characterID = 2;
    public $productDescription = 'This is a nice Apron';

    public function displayDetailedProduct(): string {
        if ($this->imageTwo === 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80') {
            $imageTwo = '<image src="' . $this->imageTwo . '"class="img-fluid" alt="Character Image"></image>';
        } else {
            $imageTwo = '';
        }

        if ($this->imageThree === 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80') {
            $imageThree = '<image src="' . $this->imageThree . '"class="img-fluid" alt="Character Image"></image>';
        } else {
            $imageThree = '';
        }

        return '<div class="Left col-sm-12 col-md-6">
                <div class="bigImage h-75">
                    <image src="'. $this->image . '"class="img-fluid" alt="Product Image"></image>
                </div>
                <div class="smallImages h-25">
                    ' . $imageTwo . $imageThree . '
                </div>
            </div>
            <div class="Right col-sm-12 col-md-6">
                <div class="h-15">
                    <h2>' . $this->title . '</h2>
                </div> 
                <div class="h-35">
                    <h4>'. $this->category['name'] . '</h4>
                    <p>' . $this->productDescription . '</p>
                </div>
                <div class="h-15">
                    <h3> Price: ' . $this->price . '</h3>
                </div>
                <div class="h-35">
                    <div class="float-left">
                        <h4>Character: ' . $this->character['name'] . '</h4>
                        <p>' . $this->character['description'] . '</p>
                    </div>
                    <image src="' . $this->character['image'] . '"class="img-fluid float-right" alt="Character Image"></image>
                </div>
            </div>';
    }
}





