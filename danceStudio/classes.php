<?php
include "utils/header.php";
?>

<div class="d-grid gap-2">
    <button class="btn rounded-0" type="button">
        <a href="classes.php" style="text-decoration: none; color:white">
            <blink> Choose the dance style you prefer, go to the Application Form, fill it and click Sign Up :-) </blink>
        </a>
    </button>
</div>

<section class="classesOffer">
    <div class="container">
        <h2 class="classesHeading">Classes we offer</h2>
        <div class="row">
            <div class="col-3">
                <img class="imgClass" src="img/classes/contemporary.jpg" alt="contemporary">
            </div>
            <div class="col-9">
                <h2 class="currentClass">Contemporary</h2>
                <p class="currentClassText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos eius sequi at unde. Sit perferendis excepturi expedita? Quaerat nobis officia iusto libero magni, totam, quis fugiat non tenetur minus id?</p>
                <button onclick="showForm()" class="btn" id="goToAppForm" type="button">Go to the Application Form!</button>

                <div class="col-8 " id="form">
                    <h2 class="currentClass">Application Form for Contemporary</h2>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Name and surname:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="name_surname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Age:</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" id="input" name="age">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Street:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="street">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">City:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="city">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Post Code:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="post_code">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Phone:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Mail:</label>
                            <div class="col-lg-5">
                                <input type="email" class="form-control" id="input" name="mail">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Class:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="Contemporary" readonly id="input" name="class">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Place:</label>
                            <div class="col-lg-5">
                                <select id="input" class="form-select" name="towns[]">
                                    <option value="Bratislava">Bratislava</option>
                                    <option value="Banská Bystrica">Banská Bystrica</option>
                                    <option value="Košice">Košice</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn" id="signUp">Sign Up!</button>
                        <div class="row " style="margin-left:210px; margin-bottom:50px;">
                            <a onclick="showForm()" type="button" id="hideButton">Hide Applicaion Form</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <img class="imgClass" src="img/classes/contemporary.jpg" alt="contemporary">
            </div>
            <div class="col-9">
                <h2 class="currentClass">Contemporary</h2>
                <p class="currentClassText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos eius sequi at unde. Sit perferendis excepturi expedita? Quaerat nobis officia iusto libero magni, totam, quis fugiat non tenetur minus id?</p>
                <button onclick="showForm2()" class="btn" id="goToAppForm" type="button">Go to the Application Form!</button>
                <div class="col-8 " id="form2">
                    <h2 class="currentClass">Application Form for Contemporary</h2>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Name and surname:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="name_surname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Age:</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" id="input" name="age">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Street:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="street">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">City:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="city">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Post Code:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="post_code">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Phone:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Mail:</label>
                            <div class="col-lg-5">
                                <input type="email" class="form-control" id="input" name="mail">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Class:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="Hip Hop" readonly id="input" name="class">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Place:</label>
                            <div class="col-lg-5">
                                <select id="input" class="form-select" name="towns[]">
                                    <option value="Bratislava">Bratislava</option>
                                    <option value="Banská Bystrica">Banská Bystrica</option>
                                    <option value="Košice">Košice</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn" id="signUp">Sign Up!</button>
                        <div class="row " style="margin-left:210px; margin-bottom:50px;">
                            <a onclick="showForm2()" type="button" id="hideButton">Hide Applicaion Form</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <img class="imgClass" src="img/classes/contemporary.jpg" alt="contemporary">
            </div>
            <div class="col-9">
                <h2 class="currentClass">Contemporary</h2>
                <p class="currentClassText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos eius sequi at unde. Sit perferendis excepturi expedita? Quaerat nobis officia iusto libero magni, totam, quis fugiat non tenetur minus id?</p>
                <button onclick="showForm3()" class="btn" id="goToAppForm" type="button">Go to the Application Form!</button>
                <div class="col-8 " id="form3">
                    <h2 class="currentClass">Application Form for Contemporary</h2>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Name and surname:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="name_surname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Age:</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" id="input" name="age">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Street:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="street">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">City:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="city">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Post Code:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="post_code">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Phone:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="input" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Mail:</label>
                            <div class="col-lg-5">
                                <input type="email" class="form-control" id="input" name="mail">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Class:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" value="Jazz" readonly id="input" name="class">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Place:</label>
                            <div class="col-lg-5">
                                <select id="input" class="form-select" name="towns[]">
                                    <option value="Bratislava">Bratislava</option>
                                    <option value="Banská Bystrica">Banská Bystrica</option>
                                    <option value="Košice">Košice</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn" id="signUp">Sign Up!</button>
                        <div class="row " style="margin-left:210px; margin-bottom:50px;">
                            <a onclick="showForm3()" type="button" id="hideButton">Hide Applicaion Form</a>
                        </div>
                    </form>
                </div>
                <div style="margin-bottom:130px"></div>
            </div>
        </div>
    </div>
</section>

<script>
    function showForm() {
        var form = document.getElementById("form");
        if (form.style.display == "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    }

    function showForm2() {
        var form = document.getElementById("form2");
        if (form.style.display == "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    }


    function showForm3() {
        var form = document.getElementById("form3");
        if (form.style.display == "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    }
</script>

<?php
include "utils/footer.php";

?>