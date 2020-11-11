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
        'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.'
    ];
//    public $categoryID = 1;
//    public $characterID = 2;
    public $productDescription = 'This is a nice Apron';

    public function displayDetailedProduct(): string {
        if ($this->imageTwo === 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80') {
            $imageTwo = '<img src="' . $this->imageTwo . '"class="secondary-images" alt="Product Image">';
        } else {
            $imageTwo = '';
        }

        if ($this->imageThree === 'https://images.unsplash.com/photo-1593376853899-fbb47a057fa0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2758&q=80') {
            $imageThree = '<img src="' . $this->imageThree . '"class="secondary-images" alt="Product Image">';
        } else {
            $imageThree = '';
        }

        return '<div class="productImages col-sm-12 col-md-6">
                <div>
                    <img src="'. $this->image . '"class="img-fluid" alt="Product Image">
                </div>
                <div class="secondaryImageContainer">
                 
                </div>
            </div>
            <div class="productContent col-sm-12 col-md-6">
                <div>
                    <h2>' . $this->title . '</h2>
                </div> 
                <div>
                    <h4>'. $this->category['name'] . '</h4>
                    <p>' . $this->productDescription . '</p>
                </div>
                <div>
                    <h3> Price: ' . $this->price . '</h3>
                </div>
                <div class="characterInfo">
                    <div class="float-left">
                        <h4>Character: ' . $this->character['name'] . '</h4>
                        <p>' . $this->character['description'] . '</p>
                    </div>
                    <div class="float-right characterImageContainer">
                        <img src="' . $this->character['image'] . '" class="characterImage" alt="Character Image">
                    </div>
                </div>
            </div>';
    }
}





