<!DOCTYPE html>
<html>

  <head>

<style>
      
      table, th, td {
    border: 1px solid black;
}
    table {
    border-spacing: 5px;
}
    .fees{
        padding: 20px;
        border: 12 px solid blue;
    }
    .forms{
        margin-left: 200px;
        
    }
      
      </style>
  </head>

  <body>
      <div class="forms">
       
  

  <form  class="fees"action="/fees/save" name="StudentRegistration" method="post">
      {{csrf_field()}}
    @if (session()->has('message'))
     {{
      session()->get('message')
      }}
      @endif

<table cellpadding="2" width="70%" bgcolor="grey" align="center"

  cellspacing="2">

<tr>

  <td colspan=2>

  <center><font size=4><b>fee payment form</b></font></center>

  </td>

  </tr>
    <tr>

  <td>Student Number</td>

  <td><input type=text name="StudentNo" id="StudentNo" size="30"></td>

  </tr>

<tr>

  <td>Name</td>

  <td><input type=text name="names" id="textname" size="30"></td>

  </tr>


    <tr>

  <td>Amount</td>

  <td><input type="text" name="Amount" id="Amount" size="30"></td>

  </tr>
    <tr>

  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" value="Submit Form" /></td>

  </tr>

  </table>

 </form>
        <form  class="forms "method="post" action="/results">
             {{csrf_field()}}
          
    
      <input type="search" name="search" >
          <input type="submit" value="search">
      </form>
      </div>

  </body>

  </html>

