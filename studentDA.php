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
                <label><b>Semester Name</b></label>
            </td>  
        
            <td> 
                <select>
                    <option value="fall">Fall Semester</option>
                    <option value="winter">Winter Semester</option>
                </select> 
            </td>
        </tr>
        
        <tr>
            <td>
                <label><b>Course</b></label> 
            </td>  
            
            <td>
                <select>
                    <option value="fall">1</option>
                    <option value="winter">2</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>
                <label><b>Filter by slot</b></label> 
            </td>  
        
            <td> 
                <select>
                    <option value="fall">Fall Semester</option>
                    <option value="winter">Winter Semester</option>
                </select> 
            </td>
        </tr>
        
        <tr>
            <td>
                <label><b>With Faculty</b></label> 
            </td>  
        
            <td> 
                <select>
                    <option value="fall">Fall Semester</option>
                    <option value="winter">Winter Semester</option>
                </select>
            </td>
        </tr> 
        
        <tr>
        
                <form action="upload.php" method="post" enctype="multipart/form-data">
    
    <td>
        <label><b>Upload Digital Assignment</b></label>
    </td>
    
    <td>     
        <input type="file" name="fileToUpload" id="fileToUpload">
    </td>
                </form>
        
        </tr>
    
        <tr>
            <td>
                <button style="margin-left: 60px">Upload</button> 
            
                <button style="margin-left: 15px">View Grades</button>
            </td>
        </tr>
    </table>
    
    
</body>
</html>