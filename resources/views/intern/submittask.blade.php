
<style>
fieldset {
    background-color: rgba(182, 221, 237, 1);
}

.title {
    margin: 50px;
}

.task {
    background-color: rgba(224, 238, 238, 1);
    border: 2px solid black;
    margin: 50px;
    padding: 30px;
}

.status {
    float: right;
}

.bor {
  border: 2px solid black;
}

button.docu {  
    background: rgba(96, 130, 182, 1);
    border: 1px solid black;
    width: 200px;
    height: 60px;
}

input[type="submit"] {
    background: rgba(96, 130, 182, 1);
    border: 1px solid black;
    width: 200px;
    height: 60px;
    float: right;
}
</style>

<fieldset>
<div class="title">
<h1>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Task Title</h1>
<div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
     &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
    Admin Name&ensp;&ensp;&ensp;&ensp;Date<div class="status">Status</div></div>
</div>
</p>

    <div class="task">
        <p>Description</p>
        <button class="docu">Document</button><br>
        <div class="status">Due Date</div></div>
    </div> 

    <div class="task">
        <form action="" method="post">
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            <input type="submit" value="Submit"><br><br>
        </form>
    </div> 
    
</fieldset>
