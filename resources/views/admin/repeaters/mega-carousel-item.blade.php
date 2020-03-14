@a17-title('Mega Carousel Item')
@a17-trigger('Add item')

@formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'translated' => true,
])

@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
    'max' => 1,
    'withVideoUrl' => false,
])
