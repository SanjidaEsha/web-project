<html>   
   <head>
      <title>JS form validation</title>      
      <script type = "text/javascript">
         
      </script>      
   </head>
   
   <body>
      <h3>ADMIN PROFILE EDIT</h3>
      <form action = "/cgi-bin/test.cgi" name = "myForm" onsubmit = "return(validate());">
         <table cellspacing = "1" cellpadding = "0" border = "1">
            
            <tr>
               <td align = "right">Name</td>
               <td><input type = "text" name = "Name" /></td>
            </tr>
            
            <tr>
               <td align = "right">Email</td>
               <td><input type = "text" name = "Email" /></td>
            </tr>
            <tr>
               <td align = "right">Age</td>
               <td><input type = "text" name = "Age" /></td>
            </tr>
            <tr>
               <td align = "right">Adress</td>
               <td><input type = "text" name = "Adress" /></td>
            </tr>
            <tr>
               <td align = "right">Phone Number</td>
               <td><input type = "text" name = "Phonenumber" /></td>
            </tr>
           
            
            <tr>
               <td align = "right">Password</td>
               <td><input type = "text" name = "Password" /></td>
            </tr>
            
            <tr>
               <td align = "right">Country</td>
               <td>
                  <select name = "Country">
                     <option value = "-1" selected>[choose yours]</option>
                     <option value = "1">USA</option>
                     <option value = "2">UK</option>
                     <option value = "3">Bangladesh</option>
                  </select>
               </td>
            </tr>
            
            <tr>
               <td align = "right"></td>
               <td><input type = "submit" value = "Submit" /></td>
            </tr>
            
         </table>

      </form> 



      <script type = "text/javascript">
  
      function validate() {
      
         if( document.myForm.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
        
        if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }

         function validateForm() {
             let x = document.forms["myForm"]["fname"].value;
             if (x == "") {
                 alert("Name must be filled out");
         function validateEmail() {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false; 

  
        
      } 
  
</script>
 

        
   </body>
</html>