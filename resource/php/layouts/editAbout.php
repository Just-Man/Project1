<?php
$interest_category = '';
$interest_subCategory = '';
$interest = '';
$age = '';
//var_dump($_POST)
?>
<section>
    <h3>Edit</h3>
    <div id="upProfilePic" >
        <form name="profilePic" action="" method="post" enctype="multipart/form-data">
            <img class="profilePic" src="resource/img/photos/bean1.jpg">
            <div class="edit">
                <label for="profilePicture">Add profile picture</label>
                <input type="file" name="pic">
            </div>
            <input class="edit" type="submit" name="profilePic" value="Save">
        </form>
    </div>
    <div id="addInfo">
        <form name="about" action="" method="post">
            <div class="edit">
                <label for="aboutText">About info</label>
                <textarea id="aboutText" name="about" cols="80" rows="10"></textarea>
            </div>
            <div id="age" class="edit">
                <label for="age">Age</label>
                <select id="age">
                    <option value="1"></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div id="personalInterests" class="edit">
                <label for="aboutText">Personal Interests</label>

            </div>
            <input class="edit" type="submit" name="about" value="Save">
        </form>
    </div>
</section>