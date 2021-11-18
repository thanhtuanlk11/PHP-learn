<div class="content">
    <?php
    $group = array('1' => 'Admin', '2' => 'Manager', '3' => 'Member', '4' => 'Guest');
    $city  = array('ct' => 'Cần Thơ', 'hg' => 'Hậu Giang', 'bt' => 'Bến Tre');
    function createSelectbox($name, $attributes, $array, $keySelect)
    {
        $xhtml = '';

        if (!empty($array)) {
            $xhtml .= '<select name="' . $name . '" id="' . $name . '" style="' . $attributes . '">';
            foreach ($array as $key => $value) {
                if ($key == $keySelect) {
                    $xhtml .= '<option value="' . $key . '"selected = "selected">' . $value . '</option>';
                } else {
                    $xhtml .= '<option value="' . $key . '">' . $value . '</option>';
                }
            }
            $xhtml .= '</select>';
        }
        return $xhtml;
    }
    $groupSelect = createSelectbox('group', 'width: 200px', $group, 4);
    $citySelect = createSelectbox('city', 'width: 300px', $city, 'hg');
    echo $groupSelect;
    echo '<br>';
    echo $citySelect;
    ?>
</div>