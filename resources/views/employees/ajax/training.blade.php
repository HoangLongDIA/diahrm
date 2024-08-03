
<!-- TAB CONTENT START -->
<div class="tab-pane fade show active mt-5" role="tabpanel" aria-labelledby="nav-email-tab">

 

    <x-cards.data :title="__('modules.emergencyContact.emergencyContact')">

        <div class="table-responsive">
            <x-table class="table-bordered">
                <x-slot name="thead">
                    <th>@lang('app.name')</th>

                </x-slot>

                @forelse ($employee->user_trainings as $count => $contact)
                    <tr class="tableRow{{$contact->id}}">
                        <td>{{ $contact->name }}</td>
 
                    </tr>
                @empty
                    <x-cards.no-record-found-list colspan="5"></x-cards.no-record-found-list>
                @endforelse
            </x-table>
        </div>

    </x-cards.data>
</div>
<!-- TAB CONTENT END -->
