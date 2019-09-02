
    /**
     * @file NRE_FileStream.tpp
     * @brief Implementation of IO's API's Object : FileStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline FileStream::FileStream(File const& p) : File::File(p) {
            }

            inline bool FileStream::isOpen() const {
                return file.is_open();
            }

            inline void FileStream::open() {
                if (exist()) {
                    file.open(getPath().getCData(), getMode());
                    if (!isOpen()) {
                        throw (Exception::FileNotOpeningException(getPath()));
                    }
                } else {
                    throw (Exception::FileNotExistingException(getPath()));
                }
            }

            inline void FileStream::openEmpty() {
                file.open(getPath().getCData(), std::ios::trunc | getMode());
                if (!isOpen()) {
                    throw (Exception::FileNotOpeningException(getPath()));
                }
            }

            inline std::fstream& FileStream::getStream() {
                return file;
            }

        }
    }
