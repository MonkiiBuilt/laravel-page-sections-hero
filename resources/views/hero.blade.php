<?php
/**
 * @author Jonathon Wallen
 * @date 6/6/17
 * @time 3:22 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>

<div class="page-section-form  page-section-form--hero">
    <div class="form-group">
        <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.content') ? 'error' : '' }}">
            <label>Image</label>
            {!! Form::hidden('sections[' . $section->id . '][data][content]', !empty($section->data['content']) ? $section->data['content'] : null, ['id' => 'image-' . $section->id]) !!}
            <div class="asset" data-id="image-{{ $section->id }}" data-title="Image (250px Width x 160px Height)"></div>
            <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.content') }}</div>
        </fieldset>
    </div>

    {!! Form::hidden('sections[' . $section->id . '][type]', 'image') !!}
    {!! Form::hidden('sections[' . $section->id . '][delta]', $section->delta) !!}

    <div id="asset-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="plan-info" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Asset picker</h4>
                </div>
                <div class="modal-body">
                    <!-- This iframe's src will be updated to point at the asset picker when the modal opens -->
                    <iframe class="asset-picker-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .asset-picker-iframe {
            width: 1000px;
            height: 805px;
            border: 0;
        }
    </style>
@endpush


@push('scripts')
    <script>
        window.assetModalURL = "<?= route("laravel-asset-manager-selector") ?>";
    </script>
@endpush