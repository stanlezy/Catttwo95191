<!DOCTYPE html>
<html>

  <head>
      <title>Registration::cat 2</title>
<style>
      
      table, th, td {
    border: 1px solid black;
}
    table {
    border-spacing: 5px;
}
      
      </style>

  </head>

  <body>

  <form action="/student/save" name="StudentRegistration" method="post">
         {{csrf_field()}}
    @if (session()->has('message'))
     {{
      session()->get('message')
      }}
      @endif


<table cellpadding="4" width="70%"  bgcolor="grey" align="center"

  cellspacing="2">

<tr>

  <td colspan=2>

  <center><font size=4><b><b>Student registration form</b></font></center>

  </td>

  </tr>
    <tr>

  <td>Student Number</td>

  <td><input type=text name="studentNo" id="StudentNo" size="30"></td>

  </tr>

<tr>

  <td>Name</td>

  <td><input type=text name="names" id="textname" size="30"></td>

  </tr>



 

<tr>

  <td> Address</td>

  <td><input type="text" name="address"

  id="address" size="30"></td>

  </tr>



  <tr>




<tr>

  <td>DOB</td>

  <td><input type="text" name="dob" id="dob" size="30"></td>

  </tr>


  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" value="Submit Form" /></td>

  </tr>

  </table>

  </form>

  </body>

  </html>
