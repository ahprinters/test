
   


<!DOCTYPE html>
<html>
<head>
    <title>Sum of Three Integers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">    <!-- <link rel="stylesheet" href="/css/styles.css"> -->
</head>
<body>
    <div class="container-fluid">
    <form class="mx-auto" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div><span><h1 class="text-center"><?=$heading;?></h1> </span></div>
    <div class="mb-3 mt-3">
            <label for="num1" class="form-label">Enter first number:</label>
            <input type="number" name="num1" class="form-control" id="exampleFormControlInput1" 
                   placeholder="Enter First Number" size="20" required>
                   <!-- <div><span class="text-danger"><?php echo $nameError?></span></div> -->
        
                   <div class="mb-3 mt-3">
            <label for="num2" class="form-label">Enter Second number:</label>
            <input type="number" name="num2" class="form-control" id="exampleFormControlInput1" 
                   placeholder="Enter Second Number" size="20" required>
                   <!-- <div><span class="text-danger"><?php echo $nameError?></span></div> -->
            <div class="mb-3 mt-3">
            <label for="num3" class="form-label">Enter 3rd number:</label>
            <input type="number" name="num3" class="form-control" id="exampleFormControlInput1" 
                   placeholder="Enter 3rd Number" size="20" required>
                   <!-- <div><span class="text-danger"><?php echo $nameError?></span></div> -->       
                   <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>

    </form>

    </div>

    
</body>
</html>


            
  