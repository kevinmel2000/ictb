
<label>If '<strong>No</strong>', and your abstract is accepted, what kind of funding support needed?</label>
<div class="row collapse">
    <div class="three columns">
        <select name="cb_typesupport" id="cb_typesupport">
            <option value="1">Accommodation</option>
        </select>
    </div>
</div>

<label> What can you contribute to the conference in exchange of funding support?</label>
<textarea name="tx_contribution" id="tx_contribution" class="smoothborder ctextarea" rows="8" placeholder="Contribution" value="{{ old('tx_contribution', $user->contribution) }}" required></textarea>