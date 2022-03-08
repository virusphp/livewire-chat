@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="card">
				<div class="card-header">
					Group
				</div>
				<div class="card-body">
					<div class="list-group list-group-flush">
						<div role="button" class="list-group-item">Keluarga</div>
						<div role="button" class="list-group-item">Alumni</div>
						<div role="button" class="list-group-item">Kantor</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Keluarga</div>
				<div class="card-body">
					<div class="list-group list-group-flush mb-4">
						<div class="list-group-item">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
						<div class="list-group-item text-end">
							<div>[12 Febuari 2022 16:00 Sugandi] </div>
							<div>Lorem ipsum dolor sit amet.</div>
						</div>
					</div>
					<div class="d-flex">
						<input type="text" class="form-control me-3" placeholder="Message...">
						<button class="btn btn-primary">Kirim</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection