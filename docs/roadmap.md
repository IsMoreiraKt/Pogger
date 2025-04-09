# Pogger RoadMap

This file serves as a development guide for the **Pogger** library - a logging system for PHP that emphasizes ease of use, minimal configuration, and extensibility. Listed here are all the steps needed to build the library in an organized fashion.

<hr>

#### 1. Initial Setup

- [x] Create the basic structure of the library.
- [x] Register the autoload in composer.json.
- [x] Create the Pogger namespace.
- [x] Implement Log::info() with std::out.

#### 2. Pogger API

- [x] Log class with methods: **debug()**, **info()**, **warning()**, **error()**.
- [ ] Multiple channel support via **channel()**.
- [ ] Additional context support through **withContext()**.
- [ ] Internal forwarding to a logger manager.

#### 3. Pogger API Core

- [x] Create logger manager to manage channel instances.
- [x] Create **ChannelInterface** interface.
- [ ] Implement **File** channel.
- [x] Implement **Stdout** channel
- [ ] Multiple active channels support.

#### 4. Pogger Configuration

- [ ] Support for configuration files.
- [ ] Fallback logic if no configuration file exists.
- [ ] Load channels based on configuration.
- [ ] Support for env files for dynamic configs.

#### 5. Pogger Polish

- [ ] **PoggerFormatter** system.
- [ ] Custom formatting per channel.
- [ ] Global context by request.
- [ ] Support for minimum levels per channel.
