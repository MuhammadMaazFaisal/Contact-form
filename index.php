<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <title>Contact Form</title>
</head>

<body class="row bg-">
<div class="d-flex col-4 ml-5 justify-content-end ">
        <img class='py-5' src="signup-image.jpg">
    </div>
    <div class="container my-3 mx-5 px-5 col">
        <div class="my-5">
            <div class="text-primary">
                <h1 class="fw-bold">Tell us about your issue</h1>
            </div>
            <div class="">
                <form action="view.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="issue">Your issue: </label>
                        <select name="issue" id="si" class="form-control" value="<?php if (isset($_SESSION['issue'])) echo $_SESSION['issue'] . ' selected' ?>">
                            <option value="query" <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'query') echo "selected" ?>>Query</option>
                            <option value="feedback" <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'feedback') echo "selected" ?>>Feedback</option>
                            <option value="complaint" <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'complaint') echo "selected" ?>>Complaint</option>
                            <option value="other" <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'other') echo "selected" ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="description" class="form-label"><strong>Description</strong></label>
    		<div>
    			<textarea name="description" id="editor" placeholder="Description">
                <?php if (isset($_SESSION['description'])) echo $_SESSION['description'] ?>
            		
        		</textarea>
    		</div>
                    </div>
                    <div class="d-flex justify-content-end mr-4">
                    <button type="submit" name="submit" class="btn btn-primary px-3">Submit</button>
                    </div>
                </form>
                <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
            </div>
        </div>
    </div>
    
</body>

</html>