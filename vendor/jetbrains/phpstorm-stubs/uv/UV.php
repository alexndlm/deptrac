<?php

namespace DEPTRAC_INTERNAL;

class UV
{
    public const RUN_DEFAULT = 0;
    public const RUN_ONCE = 1;
    public const RUN_NOWAIT = 2;
    public const CHANGE = 2;
    public const RENAME = 1;
    public const READABLE = 1;
    public const WRITABLE = 2;
    public const O_RDONLY = 0;
    public const O_WRONLY = 1;
    public const O_RDWR = 2;
    public const O_CREAT = 64;
    public const O_EXCL = 128;
    public const O_TRUNC = 512;
    public const O_APPEND = 1024;
    public const S_IFDIR = 16384;
    public const S_IFREG = 32768;
    public const O_NOCTTY = 256;
    public const S_IRWXU = 448;
    public const S_IRUSR = 256;
    public const S_IWUSR = 128;
    public const S_IXUSR = 64;
    public const S_IRWXG = 56;
    public const S_IRGRP = 32;
    public const S_IWGRP = 16;
    public const S_IXGRP = 8;
    public const S_IRWXO = 7;
    public const S_IROTH = 4;
    public const S_IWOTH = 2;
    public const S_IXOTH = 1;
    public const SIG_IGN = 1;
    public const SIG_DFL = 0;
    public const SIG_ERR = -1;
    public const SIGHUP = 1;
    public const SIGINT = 2;
    public const SIGQUIT = 3;
    public const SIGILL = 4;
    public const SIGTRAP = 5;
    public const SIGABRT = 6;
    public const SIGIOT = 6;
    public const SIGBUS = 7;
    public const SIGFPE = 8;
    public const SIGKILL = 9;
    public const SIGUSR1 = 10;
    public const SIGSEGV = 11;
    public const SIGUSR2 = 12;
    public const SIGPIPE = 13;
    public const SIGALRM = 14;
    public const SIGTERM = 15;
    public const SIGSTKFLT = 16;
    public const SIGCHLD = 17;
    public const SIGCONT = 18;
    public const SIGSTOP = 19;
    public const SIGTSTP = 20;
    public const SIGTTIN = 21;
    public const SIGTTOU = 22;
    public const SIGURG = 23;
    public const SIGXCPU = 24;
    public const SIGXFSZ = 25;
    public const SIGVTALRM = 26;
    public const SIGPROF = 27;
    public const SIGWINCH = 28;
    public const SIGPOLL = 29;
    public const SIGIO = 29;
    public const SIGPWR = 30;
    public const SIGSYS = 31;
    public const SIGBABY = 31;
    public const AF_INET = 2;
    public const AF_INET6 = 10;
    public const AF_UNSPEC = 0;
    public const LEAVE_GROUP = 0;
    public const JOIN_GROUP = 1;
    public const IS_UV_TCP = 0;
    public const IS_UV_UDP = 1;
    public const IS_UV_PIPE = 2;
    public const IS_UV_IDLE = 3;
    public const IS_UV_TIMER = 4;
    public const IS_UV_ASYNC = 5;
    public const IS_UV_LOOP = 6;
    public const IS_UV_HANDLE = 7;
    public const IS_UV_STREAM = 8;
    public const IS_UV_ADDRINFO = 9;
    public const IS_UV_PROCESS = 10;
    public const IS_UV_PREPARE = 11;
    public const IS_UV_CHECK = 12;
    public const IS_UV_WORK = 13;
    public const IS_UV_FS = 14;
    public const IS_UV_FS_EVENT = 15;
    public const IS_UV_TTY = 16;
    public const IS_UV_FS_POLL = 17;
    public const IS_UV_POLL = 18;
    public const UNKNOWN_HANDLE = 0;
    public const FILE = 17;
    public const ASYNC = 1;
    public const CHECK = 2;
    public const FS_EVENT = 3;
    public const FS_POLL = 4;
    public const HANDLE = 5;
    public const IDLE = 6;
    public const NAMED_PIPE = 7;
    public const POLL = 8;
    public const PREPARE = 9;
    public const PROCESS = 10;
    public const STREAM = 11;
    public const TCP = 12;
    public const TIMER = 13;
    public const TTY = 14;
    public const UDP = 15;
    public const SIGNAL = 16;
    public const HANDLE_TYPE_MAX = 18;
    public const IGNORE = 0;
    public const CREATE_PIPE = 1;
    public const INHERIT_FD = 2;
    public const INHERIT_STREAM = 4;
    public const READABLE_PIPE = 16;
    public const WRITABLE_PIPE = 32;
    public const PROCESS_SETUID = 1;
    public const PROCESS_SETGID = 2;
    public const PROCESS_WINDOWS_VERBATIM_ARGUMENTS = 4;
    public const PROCESS_DETACHED = 8;
    public const E2BIG = -7;
    public const EACCES = -13;
    public const EADDRINUSE = -98;
    public const EADDRNOTAVAIL = -99;
    public const EAFNOSUPPORT = -97;
    public const EAGAIN = -11;
    public const EAI_ADDRFAMILY = -3000;
    public const EAI_AGAIN = -3001;
    public const EAI_BADFLAGS = -3002;
    public const EAI_BADHINTS = -3013;
    public const EAI_CANCELED = -3003;
    public const EAI_FAIL = -3004;
    public const EAI_FAMILY = -3005;
    public const EAI_MEMORY = -3006;
    public const EAI_NODATA = -3007;
    public const EAI_NONAME = -3008;
    public const EAI_OVERFLOW = -3009;
    public const EAI_PROTOCOL = -3014;
    public const EAI_SERVICE = -3010;
    public const EAI_SOCKTYPE = -3011;
    public const EALREADY = -114;
    public const EBADF = -9;
    public const EBUSY = -16;
    public const ECANCELED = -125;
    public const ECHARSET = -4080;
    public const ECONNABORTED = -103;
    public const ECONNREFUSED = -111;
    public const ECONNRESET = -104;
    public const EDESTADDRREQ = -89;
    public const EEXIST = -17;
    public const EFAULT = -14;
    public const EFBIG = -27;
    public const EHOSTUNREACH = -113;
    public const EINTR = -4;
    public const EINVAL = -22;
    public const EIO = -5;
    public const EISCONN = -106;
    public const EISDIR = -21;
    public const ELOOP = -40;
    public const EMFILE = -24;
    public const EMSGSIZE = -90;
    public const ENAMETOOLONG = -36;
    public const ENETDOWN = -100;
    public const ENETUNREACH = -101;
    public const ENFILE = -23;
    public const ENOBUFS = -105;
    public const ENODEV = -19;
    public const ENOENT = -2;
    public const ENOMEM = -12;
    public const ENONET = -64;
    public const ENOPROTOOPT = -92;
    public const ENOSPC = -28;
    public const ENOSYS = -38;
    public const ENOTCONN = -107;
    public const ENOTDIR = -20;
    public const ENOTEMPTY = -39;
    public const ENOTSOCK = -88;
    public const ENOTSUP = -95;
    public const EPERM = -1;
    public const EPIPE = -32;
    public const EPROTO = -71;
    public const EPROTONOSUPPORT = -93;
    public const EPROTOTYPE = -91;
    public const ERANGE = -34;
    public const EROFS = -30;
    public const ESHUTDOWN = -108;
    public const ESPIPE = -29;
    public const ESRCH = -3;
    public const ETIMEDOUT = -110;
    public const ETXTBSY = -26;
    public const EXDEV = -18;
    public const UNKNOWN = -4094;
    public const EOF = -4095;
    public const ENXIO = -6;
    public const EMLINK = -31;
    public const EHOSTDOWN = -112;
    public const EREMOTEIO = -121;
    public const ENOTTY = -25;
    public const EFTYPE = -4028;
}
\class_alias('DEPTRAC_INTERNAL\\UV', 'UV', \false);
