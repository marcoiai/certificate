
create table entities(
	id serial not null primary key,
	name varchar not null,
	type char(1) not null,
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp not null default now()::timestamp(0)
);

drop table if exists certificates;
create table certificates(
	id serial not null primary key,
	client_id int not null REFERENCES entities(id),
	agent_id int not null REFERENCES entities(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp,
	finished_at timestamp
);

drop table if exists certificates_locks;
certificates_locks(
	id serial not null primary key,
	nummber varchar not null,
    certificate_id integere not null REFERENCES certificates(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp,
);

drop table if exists certificates_images;
certificates_images(
	id serial not null primary key,
	image varchar not null,
    certificate_id integere not null REFERENCES certificates(id),
	created_at timestamp not null default now()::timestamp(0),
	updated_at timestamp not null default now()::timestamp(0),
	deleted_at timestamp,
);
