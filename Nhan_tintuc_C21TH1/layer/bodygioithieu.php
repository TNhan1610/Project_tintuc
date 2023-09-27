<div class="container">

<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <?php
                $result_slide = get_slidei();
                while ($rowslide = mysqli_fetch_assoc($result_slide)){
                ?>
                <div class="item <?php if ($rowslide["id"]=="1") {echo "active";}?>">
                    <img class="slide-image" src="image/slide/<?php echo $rowslide['Hinh'];?>" alt="<?php echo $rowslide["Ten"];?>"/>
                </div>
                <?php
                }
                ?>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<!-- end slide -->

<div class="space20"></div>
<div class="row main-left">
    <?php include_once("layer/menu.php")?>
    <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
					   <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias expedita itaque voluptate tempora necessitatibus, sed perspiciatis mollitia ratione ullam cupiditate eius qui, odio suscipit consectetur. Esse qui vero iste beatae fugiat, ut numquam provident delectus odit illo ullam soluta. Exercitationem ab tempore recusandae quisquam. Voluptas nisi fugiat ad minima tenetur recusandae laborum harum laudantium. Ab adipisci animi error vitae quaerat inventore rem minima? Cumque temporibus porro voluptatibus corporis dolorum sed labore a officiis nostrum qui rem esse ad, sit alias commodi voluptas ea repellendus quo odio ipsum obcaecati excepturi ab architecto ut. Quibusdam reprehenderit, qui consectetur doloremque excepturi debitis iusto fugit suscipit optio inventore expedita eum explicabo quisquam dolore laborum nihil earum nisi fuga vel natus itaque eos, minima iste beatae. Facilis fugit obcaecati necessitatibus nobis libero saepe ipsum, alias nam distinctio fuga, maiores cupiditate quaerat quae aperiam ipsa consectetur neque omnis. Dolorum commodi vel consectetur debitis voluptatum deleniti nihil minima repellat ipsum? Magnam fugit dolorum corrupti consectetur et accusantium vitae minus reprehenderit repudiandae maiores, quas esse tempore ratione recusandae voluptates nostrum nobis quasi sint sed sapiente reiciendis, expedita, odio nam! Minima iste est nesciunt necessitatibus aperiam ad in delectus hic rerum id consectetur sapiente dolores exercitationem ipsum, sint, ex suscipit. Laboriosam, labore! Quam velit laboriosam natus non? At porro possimus voluptatum quae, earum ipsa culpa sed molestias, modi dolorem et, provident accusamus cumque recusandae error illum quisquam sint repellendus perspiciatis debitis numquam. Dolorem reiciendis necessitatibus facilis assumenda iure nostrum debitis veniam repellendus iusto tempora velit dolor consectetur animi, obcaecati nobis, dignissimos quidem dolorum non voluptatibus deserunt laboriosam unde soluta sapiente? Nulla ratione sint ducimus quos voluptates ullam odio quibusdam accusamus assumenda perspiciatis corrupti et reiciendis facere blanditiis molestias earum quam porro labore provident, distinctio qui! Unde, voluptate labore repudiandae, dolor ducimus eaque commodi, veniam illum praesentium non repellendus tempore ullam doloremque adipisci animi perferendis ipsam corporis. Aut quis similique autem, temporibus iusto, placeat esse fugit corporis est numquam velit, distinctio molestiae vel eius maxime quo? Perspiciatis magnam quos omnis quibusdam corrupti debitis optio velit ratione nostrum? Tempora, consectetur neque? Repellendus consequatur quia voluptate ducimus autem reiciendis vitae? Impedit nihil sed inventore repellat, sint accusamus quasi. Illo vel eaque quo inventore nisi aperiam, maxime natus eum modi delectus, sapiente quasi! Unde nostrum iste voluptatibus at alias, natus iure odit ipsum sunt quidem qui dicta aspernatur ducimus expedita illo, pariatur quasi possimus, iusto commodi vitae? Sequi hic, eos, doloribus voluptate minima, nulla corporis deleniti maxime aperiam culpa dolorum nemo mollitia vitae nobis recusandae! Officia suscipit id quod praesentium numquam libero consequuntur accusamus assumenda blanditiis accusantium rerum commodi laudantium amet totam corrupti, odio dolores mollitia temporibus neque dolorum, asperiores unde incidunt dicta. Et doloremque itaque, necessitatibus, dolorum vel sunt consequuntur, quidem corrupti nihil magni nobis? Numquam deleniti quisquam consequuntur, laborum reiciendis blanditiis quo cumque beatae tempore facere ullam distinctio eum odit itaque repellat obcaecati dolore rerum. Quo, laborum laudantium! Quo dolore molestias quis accusantium error eveniet tempore repellendus! Delectus, molestiae similique id amet aspernatur eum officia consectetur, expedita dolorem ipsa ea?
					   </p>
					</div>
	            </div>
        	</div>
</div>
<!-- /.row -->
</div>