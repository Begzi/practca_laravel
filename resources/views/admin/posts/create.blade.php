

@extends('admin.layouts.layout')

@section('content')
<form role="form" method="post" action="http://127.0.0.1:8000/notice/api/edit53" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">

        <div class="form-group">
            <label for="content">Дата окончания рассылки: </label>
            <input name='ended' type="date" >
        </div>

        <div class="form-group">
            <label for="content">Текст сообщения</label>
            <textarea name="text" class="form-control" id="content" rows="7"
                      placeholder="Текст сообщения ..." ></textarea>
        </div>

        <div class="form-group">
            <label for="filters">Фильтры</label>
            <select name="filters" id="filters" class="select2" multiple="multiple"
                    data-placeholder="Выбор фильтров" style="width: 100%;" >
                    <option value="61">61</option>
                    <option value="56">56</option>
                    <option value="55">55</option>
                    <option value="54">54</option>
                    <option value="53">53</option>
                    <option value="52">52</option>
                    <option value="51">51</option>
                    <option value="50">50</option>
                    <option value="49">49</option>
                    <option value="48">48</option>
                    <option value="47">47</option>
                    <option value="46">46</option>
                    <option value="43">43</option>
                    <option value="42">42</option>
            </select>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
@endsection