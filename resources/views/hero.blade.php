<?php
/**
 * @author Jonathon Wallen
 * @date 6/6/17
 * @time 3:22 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>
<div class="panel">
    <div class="panel__inner">

        <div class="panel__row">
            <div class="panel__full">
                <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.content') ? 'error' : '' }}">
                    <label for="thumb">Image <span></span></label>
                    {!! Form::hidden('sections[' . $section->id . '][data][content]', !empty($section->data['content']) ? $section->data['content'] : null, ['id' => 'image-' . $section->id]) !!}
                    <div class="asset" data-id="image-{{ $section->id }}" data-title="Image (250px Width x 160px Height)"></div>
                    <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.content') }}</div>
                </fieldset>

                {!! Form::hidden('sections[' . $section->id . '][type]', 'image') !!}
                {!! Form::hidden('sections[' . $section->id . '][delta]', $section->delta) !!}
            </div>
        </div>

    </div>
</div>
