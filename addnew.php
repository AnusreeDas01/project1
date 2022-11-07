<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
    font-family: 'Poppins', sans-serif;
}

.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: #FFF;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
}
form{
    margin-top: 30px;
}
table form tr td{
    width:140px;
}
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field button{
    color: #fff;
    background-color: #0171d3;
    transition: all 0.3s ease;
    cursor: pointer;
}
.field button:hover{
    background-color: #016dcb;
}
    </style>

</head>
<body>
<section class="container">







    <div class="form">
    <div class="form-content">
                    <header>Add New</header>
	<table style="width:100%;margin:40px 55px 0px 55px;">
		<form action="register.php">
			<tr>
				<td>
                <label for="name">Name</label>
				</td>
				<td>
                <input type="text" name="name" id="name">
				</td>
			</tr>
			<tr>
				<td>
                    <label for="id">ID</label>
				</td>
				<td>
                    <input type="text" name="id" id="id">
				</td>
			</tr>
			<tr>
				<td>
                    <label for="quantity">Quantity</label>					
				</td>
				<td>
                    <input type="int" name="quantity" id="quantity">                  
				</td>
			</tr>
			<tr>
				<td>                   			
                    <label for="date">Purchase Date</label>
				</td>
				<td>                                
                    <input type="date" name="date" id="date">
				</td>
			</tr>
			<tr>
				<td>                   				
                    <label for="date">Expiry Date</label>
				</td>
				<td>                              
                    <input type="date" name="date" id="date">
				</td>
			</tr>
			<tr>
                <td>                   				
                    <label for="img">Bill</label>
				</td>
				<td>                  
                    <input type="file" name="bill" id="bill" style="box-sizing: unset;">
				</td>
			</tr>
			<tr>
				<td>                 
                    <label for="Write Note">Note</label>
				</td>
				<td>                       
                    <textarea name="text" cols="" rows="" id="Write Note"></textarea>
				</td>
			</tr>
			<!-- <tr>
				<td class="field">              		
                            <button name="submit_btn">Submit</button>                       
				</td>
				<td class="field">              		
                            <button name="reset_btn">Reset</button>                       
				</td>			
			</tr> -->
			
		</form>
	</table>
                    <div style="padding: 3vh 10vh;
    display: flex;
    justify-content: space-between;">
                    <div class="field" style="width: 140px;">
                           <button name="submit_btn">Save</button>
                        </div>
                        
                        <div class="field" style="width: 140px;">
                            <button name="reset_btn">Reset</button>
                        </div>
                    </div>
     </div>                   
</div>
</section>
</body>
</html>