<?php
	require 'header.php';
	
	echo "<div data-role='page' id='pMain'>\n";
	echo "<div data-role='content' style='padding: 15px'>\n";
?>
<script src="libs/jSignature.min.js"></script>
<img style="position: relative;max-width: 50%;width: auto\9;" src="i3logo.jpg">

<h1>Liability Release:</h1><br>

<h3>Between and i3 Detroit, NFP, 1481A Wordsworth Ferndale, MI 48220 ("i3 Detroit") and</h3>

<form action="process.php" method="get">

	<div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="first" id="first" value="" placeholder="First"/></div>

	<div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="last" id="last" value="" placeholder="Last"/></div>

	<table>
	<tr><td width="10%">
        <select name="q1" id="q1" data-role="slider">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select></td></td>
	<td>By signing this agreement, I acknowledge that i3 Detroit is a dangerous place and I agree to HOLD HARMLESS i3 Detroit, its members, its officers, and its directors.</td>
	</tr>
	
	
	<tr><td width="10%">
        <select name="q2" id="q2" data-role="slider">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select></td>
        <td>I understand that I am personally responsible for my safety and actions. I will follow all safety instructions and signage at i3 Detroit.</td>

    </tr>


    <tr><td width="10%">
        <select name="q3" id="q3" data-role="slider">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select></td>
        <td>I also understand that I am responsible for properly monitoring and labeling anything I bring to i3 Detroit and that i3 Detroit is not responsible for any lost, damaged, or stolen property.</td>

    </tr>


    <tr><td width="10%">
        <select name="q4" id="q4" data-role="slider">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select></td>
        <td>I affirm that I am 18 years of age or older, and that I am mentally competent to sign this release.</td>


    </tr>
    </table>
    
    <div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="ph" id="ph" value="" placeholder="Phone Number"/></div>
    <div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="addr" id="addr" value="" placeholder="Address"/></div>
    <div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="emcon" id="emcon" value="" placeholder="Emergency Contact Name"/></div>
    <div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="emph" id="emph" value="" placeholder="Emergency Contact Phone Number"/></div>
    <div data-role="fieldcontain" class="ui-hide-label"><input type="text" name="emr" id="emr" value="" placeholder="Emergency Contact Relationship"/></div>
    
    <h3>Signature</h3>
	<div id="signature"></div>
	<input type="hidden" id="sigdata" name="sigdata" />
	
	<script>
	    $(document).ready(function() {
	        $("#signature").jSignature()
			$('#submit').click(function(){
				var sigData = $('#signature').jSignature('getData','svgbase64');
				$('#sigdata').val(sigData);
			});
	    })
	</script>
	<input value="Submit" type="submit" id="submit" />
</form>

<?php
	
	echo "</div></div>";
	
	require 'footer.php';
?>