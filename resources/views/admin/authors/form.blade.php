@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'birthday',
        'label' => 'Birthday',
        'translated' => false
    ])

    @formField('input', [
        'name' => 'bio',
        'label' => 'Bio',
        'translated' => false,
        'type' => 'textarea'
    ])

    @formField('block_editor', [
        'blocks' => [
            'mega-carousel',
        ]
    ])
@stop
