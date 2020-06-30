<li class="top-notifications">
    <div class="message-center">
        <a href="javascript:;" class="show-all-notifications">
            <div class="user-img">
                <span class="btn btn-circle btn-warning"><i class="icon-note"></i></span>
            </div>
            <div class="mail-contnet">
                <span class="mail-desc m-0">{{ __('email.ticketReply.subject') . ' #' . $notification->data['id']}}.</span> <span class="time">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notification->created_at)->diffForHumans() }}</span>
            </div>
        </a>
    </div>
</li>
