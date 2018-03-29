<?php include('includes/functions_inc.php'); ?>
<?php 
// Set up head options
$options = array(
	"title" => "Contact us",
	"page_css" => "forms-min.css"
);
insertHead($options);?>


<?php include('includes/menu.php'); ?>


<h1>Contact us</h1>
<form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>A Stacked Form</legend>

        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Email">

        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Password">

        <label for="state">State</label>
        <select id="state">
            <option>AL</option>
            <option>CA</option>
            <option>IL</option>
        </select>

        <label for="remember" class="pure-checkbox">
            <input id="remember" type="checkbox"> Remember me
        </label>

        <button type="submit" class="pure-button pure-button-primary">Sign in</button>
    </fieldset>
</form>


<?php include('includes/footer.php');?>
