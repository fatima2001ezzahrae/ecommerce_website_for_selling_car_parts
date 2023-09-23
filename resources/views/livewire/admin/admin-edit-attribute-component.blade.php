<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Edit New Attribut
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.attributes') }}" class="btn btn-success pull-right">All Attributes</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" wire:submit.prevent="updateAttribute">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <div class="form-group">
                            <label class="col-md-4 control-lable">Attribute Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Attribute Name" class="form-control input-md" wire:model="name"/>
                                @error('name') <p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-lable"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


