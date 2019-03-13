
新增<span class='level'>一</span>级地区: <input type="text" name="" id="val"><button id="add">新增</button><button id="refer">返回上一级</button>
<table>

<thead><td colspan="3"><span class='level'>一</span>级地区</td></thead>
<tbody id="box">
<tr>
<?php foreach ($data as $k => $v): ?>

<td id="<?=$v['region_id']?>">
<?=$v['region_name']?>

<a href="javascript:void(0)" class="manage">管理</a>
<a href="javascript:void(0)" class="del">删除</a>
</td>
<?php endforeach ?>
</tr>
</tbody>
</table>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js">
</script>
<script>
	var arr=['一','二','三','四'];
	var item=0;

	var ids=[0];
  
     $('#add').click(function(){
     var val=$('#val').val();
     $.ajax({
     	url:'index.php?r=region/add&name='+$val+'&id='+ids[item],
     	dataType:'json',
     	success:function(res){

     	}
     })
    })
    
// $('#box').on('click','.del',function(){
//  var id=$(this).parent().attr('id');
 
//  $.ajax({
//      	url:'index.php?r=region/del&id='+id,
//      	dataType:'json',
//      	success:function(res){
//        if (res==1) {
// var str='<tr>';
//      	$.each(res,function(k,v){
//      	if (k%3==0 && k !=0) str+='</tr><tr>';
//          str+='<td id="'+v.region_id+'">'+v.region_name;
//          if (item<3) {
//          str+='<a href="javascript:void(0)" class="manage">管理</a>';
        
//          };
//           str+='<a href="javascript:void(0)" class="del">删除</a>';
//      	});
//      	str+='</tr>';
//      	$('#box').html(str);
//        };
//      })
//      }); 

    $('#refer').click(function(){
    item--;
    getRegion();
    })

	$('#box').on('click','.manage',function(){
    item++;
    ids[item]=$(this).parent().attr('id');
    getRegion();
     }); 

 function getRegion(){
   
    
  $('.level').html(arr[item]);
    $.ajax({
     url:'index.php?r=regin/getregion&pid='+ids[item],
     dataType:'json',
     success:function(res){
     	var str='<tr>';
     	$.each(res,function(k,v){
     	if (k%3==0 && k !=0) str+='</tr><tr>';
         str+='<td id="'+v.region_id+'">'+v.region_name;
         if (item<3) {
         str+='<a href="javascript:void(0)" class="manage">管理</a>';
        
         };
          str+='<a href="javascript:void(0)" class="del">删除</a>';
     	});
     	str+='</tr>';
     	$('#box').html(str);
     }
   
	});
	}
</script>