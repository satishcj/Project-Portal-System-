<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleHome.css"/>
</head>
<body>

<ul>
  <li><a href="studentHome.php">Home</a></li>
  <li><a href="studentDA.php">Digital Assignment</a></li>
  <li><a href="studentPU.php">Project Upload</a></li>
  <li><a href="studentPS.php">Project Search</a></li>
  <li><a href="index.php">Logout</a></li>
</ul>

    <table> 
        <tr>
            <td>
                <label><b>Project Id</b></label>
            </td>  
            <td>
                <input type="text" placeholder="Enter Project ID" name="pid" required>
            </td>
            </tr>
        
        <tr>
            <td>
                <label><b>Project Title</b></label> 
            </td>  
            <td>
                <input type="text" placeholder="Enter Project Title" name="ptitle" required>
            </td>
            
        </tr>
        
        <tr>
        
                <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <td>
        <label><b>Project Definition</b></label>
    </td>
    
    <td>     
        <input type="file" name="fileToUpload" id="fileToUpload">
    </td>
                </form>
        
        </tr>
        
        <tr>
        
                <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <td>
        <label><b>Presentation</b></label>
    </td>
    
    <td>     
        <input type="file" name="fileToUpload" id="fileToUpload">
    </td>
                </form>
        
        </tr> 
        
        <tr>
        
                <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <td>
        <label><b>Source Code</b></label>
    </td>
    
    <td>     
        <input type="file" name="fileToUpload" id="fileToUpload">
    </td>
                </form>
        
        </tr>
        
        <tr>
        
                <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <td>
        <label><b>Presentation</b></label>
    </td>
    
    <td>     
        <input type="file" name="fileToUpload" id="fileToUpload">
    </td>
                </form>
        
        </tr>
           
        <tr>
            <td>
                <label><b>Contact Information</b></label> 
            </td>  
            <td>
                <input type="text" placeholder="Enter Contact Information" name="contact" required>
            </td>
            
        </tr>
        
        <tr>
            <td>
                <button style="margin-left: 75px;">Upload</button> 
                        
            </td>
        </tr>
    </table>
    
    
</body>
</html>