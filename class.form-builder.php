<?php
class Form_Builder {

    protected  $elements;
    protected $settings = array(
        'layout' => 1, // 1 = label beside, 2 => label at top
        'action' => '',
        'method' => 'post',
        'media' => false
    );
    protected $element_defaults = array(
        'text' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'type' => 'text',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '12',
            'placeholder' => ''
        ),
        'email' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'type' => 'email',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '12'
        ),
        'textarea' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'type' => 'text',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '12',
            'cols' =>  30,
            'rows' => 10
        ),
        'select' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'type' => 'text',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '12',
            'desc' => 'What is your hobby',
            'options' => array(),
            'multiple' => false
        ),
        'checkbox' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'desc' => '',
            'class' => '',
            'id' => '',
            'type' => 'checkbox',
            'options' => array(),
            'layout' => 'horizontal', //vertical
            'span' => '12',
        ),
        'radio' => array(
            'name' => '',
            'label' => '',
            'for' => '',
            'desc' => '',
            'class' => '',
            'id' => '',
            'type' => 'radio',
            'options' => array(),
            'layout' => 'horizontal', //vertical
            'span' => '12',
        )
    );

    public function __construct( $elements = array() ){
        if( isset( $elements['settings'] ) ) {
            $this->settings = array_merge( $this->settings, $elements['settings']);
        }

        $this->elements = $elements['fields'];
        ?>
        <form action="<?php echo $this->settings['action']; ?>" method="<?php echo $this->settings['method']; ?>"
              <?php echo $this->settings['media'] ? 'enctype="multipart/form-data"' : ''; ?>>
            <?php
            foreach ( $this->elements  as $k => $element ) { ?>
                <?php $element = array_merge( $this->element_defaults[$element['type']], $element ); ?>
                <?php
                $container_class = '';
                switch ( $this->settings['layout'] ) {
                    case 1:
                        $container_class = 'row';
                        break;
                    case 2:
                        $container_class  = '';
                        break;
                }
                ?>
                <div class="form-group <?php echo 'col-sm-'.$element['span']; ?> <?php echo $container_class; ?>">
                    <?php $this->{$element['type']}($element); ?>
                </div>
                <?php
            }
            ?>
            <?php $this->submit(); ?>
        </form>
        <?php
    }

    public function text($element) { ?>
        <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
        <input type="text"
               name="<?php echo $element['name']; ?>"
               min="<?php echo $element['min']; ?>"
               max="<?php echo $element['max']; ?>"
               class="form-control <?php echo $element['class']; ?>"
               id="form-control <?php echo $element['id']; ?>"
               placeholder="<?php echo $element['placeholder']; ?>"
        >
<?php
    }

    public function textarea($element) { ?>

        <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
        <textarea name="<?php echo $element['name']; ?>"
                  class="form-control <?php echo $element['class']; ?>"
                  id="form-control <?php echo $element['id']; ?>"
                  cols="<?php echo $element['cols']; ?>"
                  rows="<?php echo $element['rows']; ?>">

        </textarea>
<?php
    }

    public function select($element) {
        ?>
        <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
        <select name="<?php echo $element['name']; ?>"
                <?php echo $element['multiple'] ? 'multiple' : ''; ?>
                class="form-control <?php echo $element['class']; ?>"
                id="form-control <?php echo $element['id']; ?>">
            <?php foreach ($element['options'] as $value => $label ) { ?>
                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
            <?php } ?>
        </select>
<?php
    }

    public function checkbox( $element ) {
        ?>
        <div class="<?php echo $element['class']; ?>" id="<?php echo $element['id']; ?>">
        <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
        <?php foreach ($element['options'] as $value => $label ) { ?>
            <input type="checkbox"
                   name="<?php echo $element['name']; ?><?php count($element['options']) > 1 ? '[]' : ''?>"
                   value="<?php echo $value; ?>"
            > <?php echo $label; ?>
        <?php } ?>
        </div>
<?php
    }

    public function radio($element) {
        ?>
        <div class="<?php echo $element['class']; ?>" id="<?php echo $element['id']; ?>">
            <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
            <?php foreach ($element['options'] as $value => $label ) { ?>
                <input type="radio"
                       name="<?php echo $element['name']; ?>"
                       value="<?php echo $value; ?>"
                > <?php echo $label; ?>
            <?php } ?>
        </div>
<?php
    }

    public function email( $element ) {
        ?>
        <label for="<?php echo $element['for']; ?>"><?php echo $element['label']; ?></label>
        <input type="email"
               name="<?php echo $element['name']; ?>"
               min="<?php echo $element['min']; ?>"
               max="<?php echo $element['max']; ?>"
               class="form-control <?php echo $element['class']; ?>"
               id="form-control <?php echo $element['id']; ?>"
        >
        <?php
    }

    public function submit() {
        ?>
        <div class="form-group">
            <input type="submit" value="<?php echo 'Submit'; ?>" class="btn btn-success">
        </div>
<?php
    }

}