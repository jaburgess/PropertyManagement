@extends('../dashboardLayouts.master')
@section('body')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css">
<style type="text/css">
.vertical-nav-menu li a {
    text-decoration: unset;
    font-size: .88rem;
}

div#reservationCalendarBooking {
    padding: 40px 0px;
}
div#reservationCalendarBooking a.fc-day-grid-event {
    cursor:pointer;
}   
</style>
<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Reservations</li>
    </ol>

    <div class="table_header">
        <div class="left">
           <!--  <form>
                <input type="text" name="search" placeholder="Search..." id="searchText" required>
            </form> -->
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('dashboardInvoicePage') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>

    <div id='reservationCalendarBooking'></div>
    <!-- Add modal -->

    <div class="modal fade edit-form" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="modal-title">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="myForm">
                    <div class="modal-body">
                        <div class="alert alert-danger " role="alert" id="danger-alert" style="display: none;">
                            End date should be greater than start date.
                          </div>
                        <div class="form-group">
                            <label for="event-title">Event name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="event-title" placeholder="Enter event name" required>
                        </div>
                        <div class="form-group">
                            <label for="start-date">Start date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="start-date" placeholder="start-date" required>
                        </div>
                        <div class="form-group">
                            <label for="end-date">End date - <small class="text-muted">Optional</small></label>
                            <input type="date" class="form-control" id="end-date" placeholder="end-date">
                        </div>
                        <div class="form-group">
                            <label for="event-color">Color</label>
                            <input type="color" class="form-control" id="event-color" value="#3788d8">
                          </div>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center" id="delete-modal-body">
              Are you sure you want to delete the event?
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary rounded-sm" data-dismiss="modal" id="cancel-button">Cancel</button>
              <button type="button" class="btn btn-danger rounded-lg" id="delete-button">Delete</button>
            </div>
          </div>
        </div>
      </div>


</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    $(document).on('click','.open_reservation_details_appear', function(){
          var clearClass=$(this).attr('class');
          var clearClass=clearClass.split('reservationID-')[1];
          var clearClass=clearClass.split('-supportive')[0];
          $('.bookingDetail'+clearClass).modal('show');
    }); 
    $(document).on('click','.modal button.close', function(){
        $('.modal').modal('hide');
    });
    $(document).on('click','.modal-footer button.btn', function(){
        $('.modal').modal('hide');
    });

  const calendarEl = document.getElementById('reservationCalendarBooking');
  
const myEvents = [
    @foreach($data as $datas)
    @php
        $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$datas->propertyID)->first();
        $account = \Illuminate\Support\Facades\DB::table('account')->where('id',$datas->userID)->first();
    @endphp
    @if($datas->userID==session('id') || $property->user_id==session('id') || session('id')==1)
        {
          id: {{$datas->id}},
          title: `@if($account!=null)@if($account->firstname!='' && $account->lastname!=''){{$account->firstname.' '.$account->lastname}}@else{{$account->email}}@endif @endif {{'('.$property->title.')'}}`, 
          start: '{{explode("-",$datas->checkin)[2].'-'.explode("-",$datas->checkin)[0].'-'.explode("-",$datas->checkin)[1]}}',
          end: '{{explode("-",$datas->checkout)[2].'-'.explode("-",$datas->checkout)[0].'-'.explode("-",$datas->checkout)[1]}}',
          allDay: false, 
          editable: false,
          classNames: ['open_reservation_details_appear','reservationID-{{$datas->id}}-supportive'],
        },
    @endif
    @endforeach
  ];


  const calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: ['dayGrid', 'interaction'],
    allDay: false,
    editable: true,
    selectable: true,
    unselectAuto: false,
    displayEventTime: false,
    events: myEvents,
    eventRender: function(info) {
      info.el.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        let existingMenu = document.querySelector('.context-menu');
        existingMenu && existingMenu.remove();
        let menu = document.createElement('div');
        menu.className = 'context-menu';
        menu.innerHTML = `<ul>
        <li><i class="fas fa-edit"></i>Edit</li>
        <li><i class="fas fa-trash-alt"></i>Delete</li>
        </ul>`;

        const eventIndex = myEvents.findIndex(event => event.id === info.event.id);
        
        
        document.body.appendChild(menu);
        menu.style.top = e.pageY + 'px';
        menu.style.left = e.pageX + 'px';

        // Edit context menu

        menu.querySelector('li:first-child').addEventListener('click', function() {
          menu.remove();

          const editModal = new bootstrap.Modal(document.getElementById('form'));
          const modalTitle = document.getElementById('modal-title');
          const titleInput = document.getElementById('event-title');
          const startDateInput = document.getElementById('start-date');
          const endDateInput = document.getElementById('end-date');
          const colorInput = document.getElementById('event-color');
          const submitButton = document.getElementById('submit-button');
          const cancelButton = document.getElementById('cancel-button');
          modalTitle.innerHTML = 'Edit Event';
          titleInput.value = info.event.title;
          startDateInput.value = moment(info.event.start).format('YYYY-MM-DD');
          endDateInput.value = moment(info.event.end, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
          colorInput.value = info.event.backgroundColor;
          submitButton.innerHTML = 'Save Changes';
          editModal.show();
          submitButton.classList.remove('btn-success')
          submitButton.classList.add('btn-primary')

          // Edit button

          submitButton.addEventListener('click', function() {
            const updatedEvents = {
              id: info.event.id,
              title: titleInput.value,
              start: startDateInput.value,
              end: moment(endDateInput.value, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD'),
              backgroundColor: colorInput.value
            }

            const eventIndex = myEvents.findIndex(event => event.id === updatedEvents.id);
            myEvents.splice(eventIndex, 1, updatedEvents);
          
            localStorage.setItem('events', JSON.stringify(myEvents));
          
            // Update the event in the calendar
            const calendarEvent = calendar.getEventById(info.event.id);
            calendarEvent.setProp('title', updatedEvents.title);
            calendarEvent.setStart(updatedEvents.start);
            calendarEvent.setEnd(updatedEvents.end);
            calendarEvent.setProp('backgroundColor', updatedEvents.backgroundColor);          
            editModal.hide();
          })                 
        });
        // Delete menu
        menu.querySelector('li:last-child').addEventListener('click', function() {
          const deleteModal = new bootstrap.Modal(document.getElementById('delete-modal'));
          const modalBody = document.getElementById('delete-modal-body');
          const cancelModal = document.getElementById('cancel-button');
          modalBody.innerHTML = `Are you sure you want to delete <b>"${info.event.title}"</b>`
          deleteModal.show();

          const deleteButton = document.getElementById('delete-button');
          deleteButton.addEventListener('click', function () {
            myEvents.splice(eventIndex, 1);
            localStorage.setItem('events', JSON.stringify(myEvents));
            calendar.getEventById(info.event.id).remove();
            deleteModal.hide();
            menu.remove();

          });
          cancelModal.addEventListener('click', function () { 
            deleteModal.hide();
          })    
        });
        document.addEventListener('click', function() {
          menu.remove();
        });
      });
    },
    eventDrop: function(info) { 
      let myEvents = JSON.parse(localStorage.getItem('events')) || [];
      const eventIndex = myEvents.findIndex(event => event.id === info.event.id);
      const updatedEvent = {
        ...myEvents[eventIndex],
        id: info.event.id, 
        title: info.event.title,
        start: moment(info.event.start).format('YYYY-MM-DD'),
        end: moment(info.event.end).format('YYYY-MM-DD'),
        backgroundColor: info.event.backgroundColor
      };
      myEvents.splice(eventIndex, 1, updatedEvent); // Replace old event data with updated event data
      localStorage.setItem('events', JSON.stringify(myEvents));
      console.log(updatedEvent);
    }

  });
  calendar.on('select', function(info) {
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    startDateInput.value = info.startStr;
    const endDate = moment(info.endStr, 'YYYY-MM-DD').subtract(1, 'day').format('YYYY-MM-DD');
    endDateInput.value = endDate;
    if(startDateInput.value === endDate) {
      endDateInput.value = '';
    }
  });
  calendar.render();
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    event.preventDefault(); // prevent default form submission

    // retrieve the form input values
    const title = document.querySelector('#event-title').value;
    const startDate = document.querySelector('#start-date').value;
    const endDate = document.querySelector('#end-date').value;
    const color = document.querySelector('#event-color').value;
    const endDateFormatted = moment(endDate, 'YYYY-MM-DD').add(1, 'day').format('YYYY-MM-DD');
    const eventId = uuidv4();

    const newEvent = {
      id: eventId,
      title: title,
      start: startDate,
      end: endDateFormatted,
      allDay: false,
      backgroundColor: color
    };
    myEvents.push(newEvent);
    calendar.addEvent(newEvent);
    form.reset();
  });

});   
</script>
@endsection
@foreach($data as $datas)
<div class="modal fade modalshg bookingDetail{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Reservation Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="show_cost_form" id="show_cost_form" style="">
                        <div class="cost_row firstCustom">
                            <h3>Reservation Dates</h3>
                            <label class="left bookingdates">{{$datas->checkin}} to {{$datas->checkout}} :</label>
                            <label class="right bookingcounts">{{$datas->bookingNumber}} {{$datas->bookingType}}</label>
                            <br>
                            <h3>Guests</h3>
                            <label class="left bookingdates">{{$datas->adults.' Adults, '.$datas->children.' Children, '.$datas->infants.' Infants'}}</label>
                        </div>
                        <div class="cost_row secondCustom">
                            <div class="cost_explanation">
                            </div>
                            <div class="cost_value">
                                Daily/Monthly<br>Rate
                            </div>
                            <div class="cost_overall">
                                Total<br>Amount
                            </div>
                        </div>
                        <div class="cost_row 333">
                            <div class="cost_explanation">Rent Price</div>
                            <div class="cost_value">$ <label class="propertyOriginalPrice">{{number_format((float)$datas->rentprice/(int)$datas->bookingNumber, 2, '.', '')}}</label></div>
                            <div class="cost_overall cost_value 3332">$ <label class="propertyTotalPrice">{{number_format($datas->rentprice, 2, '.', '')}}</label></div>
                        </div>
                        @php
                            $totalGuests=(int)$datas->adults+(int)$datas->children+(int)$datas->infants;
                            $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$datas->propertyID)->first();
                        @endphp
                        @if($property!=null && $property->priceguest!='' && (int)$property->priceguest>0)
                        <div class="cost_row">
                            <div class="cost_explanation">Guest Fee</div>
                            <div class="cost_value cleaning_fee_value">$ {{number_format((float)$property->priceguest, 2, '.', '')}}</div>
                            <div class="cost_overall cleaning_fee_value">$ <label class="propertyGuestTotalPrice">@if($totalGuests>0){{number_format((int)$property->priceguest*(int)$datas->bookingNumber, 2, '.', '')}}@else{{'0'}}@endif</label></div>
                        </div>
                        @endif
                        @if($datas->serviceFee!='')
                            @php
                                $services=explode(",",$datas->serviceFee);
                            @endphp
                            @for($i=0;$i<count($services);$i++)
                                @if($services[$i]!='')
                                    @php 
                                        $service=explode(" - ",$services[$i]);
                                        $serviceAmount=explode("$",$service[1])[1];
                                    @endphp
                                    @if(count($service)>0)
                                    <div class="cost_row">
                                        <div class="cost_explanation">{{$service[0]}}</div>
                                        <div class="cost_value cleaning_fee_value">$ {{number_format((float)$serviceAmount, 2, '.', '')}}</div>
                                        @if($service[0]=='Agency Fee')
                                            @php
                                                $serviceAmount=(float)$serviceAmount*(int)$datas->bookingNumber;
                                            @endphp
                                            <div class="cost_overall cleaning_fee_value">$ <label class="propertyServiceFeeTotalPrice fee0">{{number_format((float)$serviceAmount, 2, '.', '')}}</label></div>
                                        @else
                                            @if($service[0]=='Pet Fee')
                                                <div class="cost_overall cleaning_fee_value">$ 0</label></div>
                                            @else
                                                <div class="cost_overall cleaning_fee_value">$ <label class="propertyServiceFeeTotalPrice fee0">{{number_format((float)$serviceAmount*(int)$datas->bookingNumber, 2, '.', '')}}</label></div>
                                            @endif
                                        @endif          
                                    </div>
                                    @endif
                                @endif
                            @endfor
                        @endif
                        @if($datas->securitydeposit)
                        <div class="cost_row">
                            <div class="cost_explanation">Security Deposit Fee</div>
                            <div class="cost_value cleaning_fee_value"></div>
                            <div class="cost_overall cleaning_fee_value">$ <label class="propertySecurityDepositTotalPrice">{{number_format($datas->securitydeposit, 2, '.', '')}}</label></div>
                        </div>
                        @endif
                        <div class="cost_row" id="total_cost_row">
                            <div class="cost_explanation"><strong>Total amount payable</strong></div>
                            <div class="cost_value"></div>
                            <div class="cost_overall">$ <label class="totalBookingPropertyPrice">{{number_format($datas->totalprice, 2, '.', '')}}</label></div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
     </div>
</div>
@endforeach