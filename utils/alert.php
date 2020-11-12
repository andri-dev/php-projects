<?php 

if(isset($_GET['status'])){

    if(isset($_GET['message'])){
        $message = $_GET['message'];
    } else {
        $message = 'Message tidak boleh kosong';
    }


    switch($_GET['status']){
        case('success'):
            echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    '.$message.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>';
            break;
        case('warning'):
            $message = $_GET['message'];
            echo '<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    '.$message.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
            break;
        case('error'):
            $message = $_GET['message'];
            echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    '.$message.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
            break;
        default:
            return null;
    }
}


?>