<html>
<head>
    <title>Check Box</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function() {
        $('.parent').change(function() {
            $(this).parents('div:eq(0)').find('.child').attr('checked', $(this).is(":checked"));
            $(this).parents('div:eq(0)').find('.grandchildbox').attr('checked', $(this).is(":checked"));
        });

        $('.child').change(function() {
            $(this).parents('div:eq(0)').find('.parent').attr('checked', $(this).is(":checked"));

            if ($(this).next().next().attr("class") == "grandchild") {
                $(this).parents('div:eq(0)').find('.grandchildbox').attr('checked', $(this).is(":checked"));
                if ($(this).is(":checked") == false) {
                    $(this).parents('div:eq(0)').find('.grandchildbox').attr("checked", false);
                }
            }

            if ($(this).is(":checked") == false) {
                var temp = false;
                $(this).parents('div:eq(0)').find('.child').each(
                    function() {
                        if (this.checked == true)
                            temp = true;
                    }
                );
                $(this).parents('div:eq(0)').find('.parent').attr('checked', temp);
            }
        });

        $('.grandchildbox').change(function() {
            $(this).parents('div:eq(0)').parent().find('#child').attr('checked', $(this).is(":checked"));
            console.log($(this).parents('div:eq(0)').parent().find('#child').is(":checked"));
            if ($(this).parents('div:eq(0)').parent().find('#child').is(":checked")) {
                $(this).parents('div:eq(0)').parent().find('.parent').attr('checked', true);
            }
            if ($(this).is(":checked") == false) {
                var temp = false;
                var pTemp = false;
                $(this).parents('div:eq(0)').find('.grandchildbox').each(
                    function() {
                        if (this.checked == true)
                            temp = true;
                    }
                );
                $(this).parents('div:eq(0)').parent().find('#child').attr('checked', temp);
            }
        });

    });
</script> 
<body>     
    <div>
        <input type="checkbox" class="parent" /> Property<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" id="child"/> Edit Property<br />
        <div class="grandchild">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="grandchildbox" /> Edit Property<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="grandchildbox" /> Remove Property<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="grandchildbox" /> Add Property<br />
        </div>
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Remove Property<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Add Property<br />
    </div>
    <p></p>
    <div>
        <input type="checkbox" class="parent" /> Testimonial<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Add<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Remove<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> View<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Edit<br />
    </div>
    <p></p>
    <div>
        <input type="checkbox" class="parent" /> Users<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Edit User<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> View User List<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Add User<br />
    </div>
    <p></p>
    <div>
        <input type="checkbox" class="parent" /> Membership<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Edit Membership<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Remove Membership<br />
        &nbsp;&nbsp;&nbsp;<input type="checkbox" class="child" /> Add Membership<br />
    </div>
</body>
</html>
