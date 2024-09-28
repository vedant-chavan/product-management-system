
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Products</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<!-- <script src="jquery-3.7.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
.error {
            color: red;
        }
</style>
<script>
$(document).ready(function(){
    let table = new DataTable('#product_table');
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Product Management System</b></h2>
					</div>
                    <div class="col-sm-6">
                        <form id="reset_product_stock_form">
                            <div class="form-group">
                                <label for="product">Select Product</label>
                                <select class="form-control" id="product_dropdown" name="product_id">
                                    <option value="all">All Products</option>
                                    @foreach ($product as $value)
                                        <option value="{{ $value->id }}">{{ $value->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="stock">Enter Stock Quantity</label>
                                <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter new stock quantity">
                            </div>

                            <button type="button" class="btn btn-primary" id="update_stock">Update Stock Quantity</button>
                        </form>
                    </div>
				</div>
			</div>
			<table class="table table-striped table-hover" id="product_table">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Product Stock</th>
						<th>Order Quantities</th>
                        <th>Total Price</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($product as $value)
                        <tr>
                            <td>{{$value->product_name}}</td>
                            <td>{{$value->product_price}}</td>
                            <td>{{$value->product_stock}}</td>
                            <td>
                                <input type="number" name="quantity" value="0" class="quantity" data-id="{{ $value->id }}" data-price="{{ $value->product_price }}">
                            </td>
                            <td class="product_total_price">0</td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
            <div><h5><u>Total Amount: <span id="total_amount">0</span></u></h5></div>
            <button id="place_order">Place Order</button>
		</div>
	</div>        
</div>



</body>

<script>

    $(document).on('input', '.quantity', function() {

        //per product total
        let quantity = $(this).val();
        let price = $(this).data('price');
        let totalPrice = quantity * price;

        $(this).closest('tr').find('.product_total_price').text(totalPrice.toFixed(2));

        updateTotalAmount();
    });

    //function for all products total
    function updateTotalAmount() {
        let total = 0;
        $('.product_total_price').each(function() {
            total += parseFloat($(this).text());
        });
        $('#total_amount').text(total.toFixed(2));
    }


    //place order script
    $('#place_order').on('click', function() {

        let items = {};
        let quantityProductSelected = false;

        $('.quantity').each(function() {
            let id = $(this).data('id');
            let quantity = $(this).val();

            if (quantity > 0) {
                quantityProductSelected = true;
                items[id] = quantity; 
            }
        });
        // If any quantity is zero , show an error
        if (!quantityProductSelected) {
            Swal.fire({
                title: 'Error!',
                text: 'Please select at least one product to place an order.',
                icon: 'error'
            });
            return; 
        }
        // Show SweetAlert for confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to place the order?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, place it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{route('place_order')}}",
                    method: 'POST',
                    data: {
                        items: items,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {
                        Swal.fire({
                            title: 'Order Placed!',
                            text: response.success,
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            title: 'Error!',
                            text: response.responseJSON.error,
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });

    $('#update_stock').on('click', function() {
        let productId = $('#product_dropdown').val();
        let stock = $('#stock').val();

        if (stock === '' || stock < 0) {
            Swal.fire({
                title: 'Error!',
                text: 'Please first enter a stock quantity.',
                icon: 'error'
            });
            return;
        }

        $.ajax({
            url: "{{route('update_stock')}}",
            method: 'POST',
            data: {
                product_id: productId,
                stock: stock,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: response.success,
                    icon: 'success'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(response) {
                Swal.fire({
                    title: 'Error!',
                    text: response.responseJSON.error || 'An error occurred.',
                    icon: 'error'
                });
            }
        })
    });
</script>
</html>
